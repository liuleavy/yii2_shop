<?php
public function rules()
{
    return [
        ['adminemail', 'email', 'message' => '邮箱格式不正确', 'on' => ['seekpass']],
        ['adminemail', 'validateEmail', 'on' => 'seekpass'],
    ];
}