<?php
//
//use App\Models\Post;
//use App\Models\User;
//use Illuminate\Database\Migrations\Migration;
//use Illuminate\Database\Schema\Blueprint;
//use Illuminate\Support\Facades\Schema;
//
//return new class extends Migration
//{
//    /**
//     * Run the migrations.
//     */
//    public function up(): void
//    {
//        // Create the pivot table tag2
//        Schema::create('tag2', function (Blueprint $table) {
//            $table->id();
//            $table->foreignIdFor(Post::class, 'post_id')->constrained()->onDelete('cascade');
//            $table->foreignIdFor(User::class, 'user_id')->constrained()->onDelete('cascade');
//            $table->timestamps();
//        });
//    }
//
//    /**
//     * Reverse the migrations.
//     */
//    public function down(): void
//    {
//        Schema::dropIfExists('tag2');
//        Schema::dropIfExists('posts');
//    }
//};