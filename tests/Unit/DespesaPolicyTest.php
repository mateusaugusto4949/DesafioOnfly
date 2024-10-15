<?php

namespace Tests\Unit;

use App\Models\Despesa;
use App\Models\Usuario;
use App\Policies\DespesaPolicy;
use Tests\TestCase;

class DespesaPolicyTest extends TestCase
{
    protected $policy;

    protected function setUp(): void
    {
        parent::setUp();
        $this->policy = new DespesaPolicy();
    }

    public function test_user_can_view_own_despesa()
    {
        $usuario = Usuario::factory()->create();
        $despesa = Despesa::factory()->create(['usuario_id' => $usuario->id]);

        $this->assertTrue($this->policy->view($usuario, $despesa));
    }

    public function test_user_cannot_view_others_despesa()
    {
        $usuario = Usuario::factory()->create();
        $otherUser = Usuario::factory()->create();
        $despesa = Despesa::factory()->create(['usuario_id' => $otherUser->id]);

        $this->assertFalse($this->policy->view($usuario, $despesa));
    }

    public function test_user_can_create_despesa()
    {
        $usuario = Usuario::factory()->create();
        $this->assertTrue($this->policy->create($usuario));
    }

    public function test_user_can_update_own_despesa()
    {
        $usuario = Usuario::factory()->create();
        $despesa = Despesa::factory()->create(['usuario_id' => $usuario->id]);

        $this->assertTrue($this->policy->update($usuario, $despesa));
    }

    public function test_user_cannot_update_others_despesa()
    {
        $usuario = Usuario::factory()->create();
        $otherUser = Usuario::factory()->create();
        $despesa = Despesa::factory()->create(['usuario_id' => $otherUser->id]);

        $this->assertFalse($this->policy->update($usuario, $despesa));
    }

    public function test_user_can_delete_own_despesa()
    {
        $usuario = Usuario::factory()->create();
        $despesa = Despesa::factory()->create(['usuario_id' => $usuario->id]);

        $this->assertTrue($this->policy->delete($usuario, $despesa));
    }

    public function test_user_cannot_delete_others_despesa()
    {
        $usuario = Usuario::factory()->create();
        $otherUser = Usuario::factory()->create();
        $despesa = Despesa::factory()->create(['usuario_id' => $otherUser->id]);

        $this->assertFalse($this->policy->delete($usuario, $despesa));
    }
}
