<?php

require_once("models/User.php");
require_once("models/Message.php");

class UserDAO implements UserDAOInterface
{
    private $conn;
    private $url;
    private $message;

    public function __construct(PDO $conn, $url)
    {
        $this->conn = $conn;
        $this->url = $url;
        $this->message = new Message($url);
    }

    public function buildUser($data){
        $user = new User();

        $user->id = $data['id'];
        $user->name = $data['name'];
        $user->lastname = $data['lastname'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        $user->image = $data['image'];
        $user->bio = $data['bio'];
        $user->token = $data['token'];
        
        return $user;
    }

    public function create(User $user, $authUser = false){
        $stmt = $this->conn->prepare("INSERT INTO moviestar.dbo.users (
            name, lastname, email, password, token
        ) VALUES (
            :name, :lastname, :email, :password, :token
        )");

        $stmt->bindParam(":name", $user->name);
        $stmt->bindParam(":lastname", $user->lastname);
        $stmt->bindParam(":email", $user->email);
        $stmt->bindParam(":password", $user->password);
        $stmt->bindParam(":token", $user->token);

        $stmt->execute();

        // autenticar usuário, caso auth seja true
        if($authUser) {
            $this->setTokenSession($user->token);
        }
    }

    public function update(User $user, $redirect = true){

        $stmt = $this->conn->prepare("UPDATE moviestar.dbo.users SET 
            name = :name,
            lastname = :lastname,
            email = :email,
            image = :image,
            bio = :bio,
            token = :token
            WHERE id = :id
        ");

        $stmt->bindParam(":name", $user->name);
        $stmt->bindParam(":lastname", $user->lastname);
        $stmt->bindParam(":email", $user->email);
        $stmt->bindParam(":image", $user->image);
        $stmt->bindParam(":bio", $user->bio);
        $stmt->bindParam(":token", $user->token);
        $stmt->bindParam(":id", $user->id);

        $stmt->execute();

        if($redirect) {
            // redireciona para o perfil do usuário
            $this->message->setMessage("Dados atualizados com sucesso!", "success", "editprofile.php");
        }

    }

    public function verifyToken($protected = false){
        if(!empty($_SESSION["token"])){
            $token = $_SESSION["token"];
            $user = $this->findByToken($token);

            if($user) {
                return $user;
            } else if($protected){
                // redireciona usuário não autenticado
                $this->message->setMessage("Faça a autenticação para acessar esta página!", "error", "index.php");
            }
        } else if($protected){
            // redireciona usuário não autenticado
            $this->message->setMessage("Faça a autenticação para acessar esta página!", "error", "index.php");
        }
    }

    public function setTokenSession($token, $redirect = true){
        // salvar token na seeion
        $_SESSION["token"] = $token;

        if($redirect) {
            // redireciona para o perfil do usuário
            $this->message->setMessage("Seja bem vindo!", "success", "editprofile.php");
        }
    }

    public function authenticateUser($email, $password){
 
        $user = $this->findByEmail($email);

        if($user) {
            // checar se as senhas batem
            if(password_verify($password, $user->password)) {
                // gerar um token e inserir na session
                $token = $user->generateToken();

                $this->setTokenSession($token, false);

                // atualizar token no usuário
                $user->token = $token;

                $this->update($user, false);

                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function findByEmail($email){

        if($email != "") {

            $stmt = $this->conn->prepare("SELECT * FROM moviestar.dbo.users WHERE email = :email");
            $stmt->bindParam(":email", $email);
            $stmt->execute();
            
            if($stmt->rowCount() > 0) {
                $data = $stmt->fetch();
                $user = $this->buildUser($data);

                return $user;

            } else {
                return false;
            }

        } else {
            return false;
        }

    }

    public function findById($id){

    }

    public function findByToken($token){
        if($token != "") {

            $stmt = $this->conn->prepare("SELECT * FROM moviestar.dbo.users WHERE token = :token");
            $stmt->bindParam(":token", $token);
            $stmt->execute();
            
            if($stmt->rowCount() > 0) {
                $data = $stmt->fetch();
                $user = $this->buildUser($data);

                return $user;

            } else {
                return false;
            }

        } else {
            return false;
        }
    }

    public function destroyToken(){
        // Remove o token da session
        $_SESSION["token"] = "";

        // redirecionar e apresentar a mensagem de sucesso
        $this->message->setMessage("Você fez o logout com sucesso!", "success", "index.php"); 
    }

    public function changePassword(User $user){

        $stmt = $this->conn->prepare("UPDATE users SET
            password = :password WHERE id = :id
        ");

        $stmt->bindParam(":password", $password);
        $stmt->bindParam(":id", $id);

        $stmt->execute();

        $this->message->setMessage("Senha alterada com sucesso!", "success", "editprofile.php"); 
    }

}