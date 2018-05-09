<?php

class External_auth_plugin extends PerchAPI_AuthPlugin
{
    protected $table = 'user';

    public function log_user_in($username, $password)
    {
        //make request to check username and password
        return [
            'email' => 'admin@example.com',
            'role'  => 'admin',
        ];
    }

    public function resume_session()
    {
        //make request to check username and password
        return [
            'email' => 'admin@example.com',
            'role'  => 'admin',
        ];
    }

    public function log_user_out()
    {
        return true;
    }
}