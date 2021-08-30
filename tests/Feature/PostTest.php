<?php

namespace Tests\Feature;

use App\Posts;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class PostTest extends TestCase
{
    use WithoutMiddleware;
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testPostsCount()
    {
        factory(Posts::class, 5)->create();

        $posts = Posts::get();

        $this->assertCount(5, $posts);
    }

    public function testIndexGet()
    {
        factory(Posts::class, 5)->create();

        $response = $this->get('/admin/posts');

        $response->assertStatus(200);
        // 確認是否狀態碼正確
    }

    public function testIndexSee()
    {
        factory(Posts::class, 5)->create();

        $post = Posts::first();

        $response = $this->get('/admin/posts');

        $response->assertSee($post->title);
        // 確認是否有回傳內容
    }

    public function testShowGet()
    {
        factory(Posts::class, 5)->create();

        $post = Posts::first();

        $response = $this->get('/admin/posts/'.$post->id);

        $response->assertStatus(200);
    }

    public function testShowPost()
    {
        factory(Posts::class, 5)->create();

        $post = Posts::first();

        $response = $this->post('/admin/posts/'.$post->id);

        $response->assertStatus(200);
    }

    public function testStorePost()
    {
        $post = factory(Posts::class)->make();

        $response = $this->post('/admin/posts/store',['title'=>$post['title'],'content'=>$post['content']]);
        // post可在第二個參數寫上資料去做模擬傳送的動作

        $response->assertStatus(201);
        // 201為post成功
    }
}
