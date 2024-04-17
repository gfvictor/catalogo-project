<?php

namespace App\Policies;

use App\Models\Objects;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ObjectsPolicy
{
    protected User $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function update(User $user, Objects $objects): Response
    {
        return ($user->id === $objects->user_id) ? Response::allow() : Response::deny('Você não tem permissão para alterar este objeto!');

    }

    public function delete(User $user, Objects $objects): Response
    {
        return ($user->id === $objects->user_id) ? Response::allow() : Response::deny('Você não tem permissão para excluir este objeto!');
    }
}
