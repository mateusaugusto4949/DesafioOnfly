<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Controllers\UsuarioController;
use App\Models\Usuario;
use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use App\Exceptions\NotFoundException;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsuarioControllerTest extends TestCase
{
    use WithFaker;

    public function test_index_returns_a_collection_of_users()
    {
        $usuarioMock = \Mockery::mock(Usuario::class);
        $usuarioMock->shouldReceive('all')->once()->andReturn(collect([$usuarioMock]));

        $controller = new UsuarioController();

        $response = $controller->index();

        $this->assertCount(1, $response);
    }

    public function test_store_creates_a_new_user()
    {
        $requestMock = \Mockery::mock(StoreUsuarioRequest::class);
        $requestMock->shouldReceive('validated')->once()->andReturn([
            'name' => 'John Doe',
            'email' => 'john@example.com',
        ]);

        $usuarioMock = \Mockery::mock(Usuario::class);
        $usuarioMock->shouldReceive('create')->once()->andReturn($usuarioMock);

        $controller = new UsuarioController();

        $response = $controller->store($requestMock);

        $this->assertInstanceOf(UsuarioResource::class, $response);
    }

    public function test_show_returns_a_user()
    {
        $usuarioMock = \Mockery::mock(Usuario::class);
        $usuarioMock->shouldReceive('find')->once()->with(1)->andReturn($usuarioMock);

        $controller = new UsuarioController();

        $response = $controller->show(1);

        $this->assertInstanceOf(UsuarioResource::class, $response);
    }

    public function test_show_throws_not_found_exception()
    {
        $controller = new UsuarioController();

        $this->expectException(NotFoundException::class);

        $controller->show(999); // ID que não existe
    }

    public function test_update_modifies_an_existing_user()
    {
        $requestMock = \Mockery::mock(UpdateUsuarioRequest::class);
        $requestMock->shouldReceive('validated')->once()->andReturn([
            'name' => 'John Doe Updated',
        ]);

        $usuarioMock = \Mockery::mock(Usuario::class);
        $usuarioMock->shouldReceive('findOrFail')->once()->with(1)->andReturn($usuarioMock);
        $usuarioMock->shouldReceive('update')->once()->andReturn($usuarioMock);

        $controller = new UsuarioController();

        $response = $controller->update($requestMock, 1);

        $this->assertInstanceOf(UsuarioResource::class, $response);
    }

    public function test_destroy_deletes_a_user()
    {
        $usuarioMock = \Mockery::mock(Usuario::class);
        $usuarioMock->shouldReceive('find')->once()->with(1)->andReturn($usuarioMock);
        $usuarioMock->shouldReceive('delete')->once();

        $controller = new UsuarioController();

        $response = $controller->destroy(1);

        $this->assertEquals(204, $response->status());
    }

    public function test_destroy_throws_not_found_exception()
    {
        $controller = new UsuarioController();

        $this->expectException(NotFoundException::class);

        $controller->destroy(999); // ID que não existe
    }
}
