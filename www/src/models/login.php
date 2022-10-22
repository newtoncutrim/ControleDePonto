<?php
LoadModel("User");

class Login extends Model
{
    public function validate() {
        $erros = [];

        if (!$this->email) {
            $erros['email'] = 'E-mail e um campo obrigatório';
        }

        if (!$this->password) {
            $erros['password'] = 'Senha é campo obrigatório';
        }

        if(count($erros) > 0) {
            throw new ValidateException($erros);
        }
    }

    public function CheckLogin() {
        $this->validate();
        $user = User::getOne(['email' => $this->email]);
        if($user) {
            if($user->end_date){
                throw new AppException('usuario esta desligado da empresa.');
            }
            if(password_verify($this->password, $user->password)) {
                return $user;
            }
        }
        throw new AppException('usuario/senha invalidos.');
    }
}
