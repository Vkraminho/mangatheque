<?php 
class User {
    private int $id = 12;
    private string $pseudo = 'toto';
    private string $email = 'toto@gmail.com';
    private string $password = '123456';
    private DateTimeImmutable $created_at;

    public function getId() : int{
        return $this->id;
    }
    public function getPseudo() : string{
        return $this->pseudo;
    }
    public function getEmail(): string{
        return $this->email;
    }
    public function getPassword() : string{
        return $this->password;
    }
    public function getCreated_at() : DateTimeImmutable {
        return $this->created_at;
    }
    public function setId(int $id) : void{
    $this->id =$id;
}
    public function setPseudo(string $pseudo) : void{
    $this->pseudo =$pseudo;
}
    public function setEmail(string $email) : void{
    $this->email =$email;
}
    public function setPassword(string $password) : void{
    $this->password =$password;
}
}

$user =new User();
$user2 = new User();

echo $user->getId() . '<br>';
echo $user2->getId() . '<br>';
echo $user->getPseudo() . '<br>';
echo $user2->getPseudo() . '<br>';
echo $user->getEmail() . '<br>';
echo $user2->getEmail() . '<br>';
echo $user->getPassword() . '<br>';
echo $user2->getPassword() . '<br>';

$user->setId(25);
$user->setPseudo('tata');
$user->setEmail('tata@gmail.com');
$user->setPassword(654321);


echo $user->getId() . '<br>';
echo $user2->getId() . '<br>';
echo $user->getPseudo() . '<br>';
echo $user2->getPseudo() . '<br>';
echo $user->getEmail() . '<br>';
echo $user2->getEmail() . '<br>';
echo $user->getPassword() . '<br>';
echo $user2->getPassword() . '<br>';
echo $user->getcreated_at() . '<br>';
echo $user2->getcreated_at() . '<br>';



