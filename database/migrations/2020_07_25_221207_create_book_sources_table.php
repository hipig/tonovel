<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookSourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_sources', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable()->comment('用户ID');
            // 主体信息
            $table->string('name')->comment('书源');
            $table->string('key')->comment('书源标识');
            $table->string('url')->comment('书源网址');
            // 搜索结果规则
            $table->string('search_url')->comment('搜索网址');
            $table->string('search_rule')->nullable()->comment('搜索结果规则');
            $table->string('search_name_rule')->nullable()->comment('搜索结果书名规则');
            $table->string('search_author_rule')->nullable()->comment('搜索结果作者规则');
            $table->string('search_cover_rule')->nullable()->comment('搜索结果封面规则');
            $table->string('search_category_rule')->nullable()->comment('搜索结果分类规则');
            $table->string('search_new_chapter_rule')->nullable()->comment('搜索结果最新章节规则');
            $table->string('search_url_rule')->nullable()->comment('搜索结果链接规则');
            // 详情书籍规则
            $table->string('detail_name_rule')->nullable()->comment('详情书名规则');
            $table->string('detail_author_rule')->nullable()->comment('详情作者规则');
            $table->string('detail_cover_rule')->nullable()->comment('详情封面规则');
            $table->string('detail_category_rule')->nullable()->comment('详情分类规则');
            $table->string('detail_new_chapter_rule')->nullable()->comment('详情最新章节规则');
            $table->string('detail_description_rule')->nullable()->comment('详情描述规则');
            // 章节规则
            $table->string('chapter_rule')->nullable()->comment('全部章节规则');
            $table->string('chapter_name_rule')->nullable()->comment('全部章节名称规则');
            $table->string('chapter_url_rule')->nullable()->comment('全部章节链接规则');
            // 内容规则
            $table->string('content_name_rule')->nullable()->comment('内容名称规则');
            $table->string('content_text_rule')->nullable()->comment('内容正文规则');
            $table->string('content_prev_url_rule')->nullable()->comment('内容上一章链接规则');
            $table->string('content_next_url_rule')->nullable()->comment('内容下一章链接规则');

            $table->boolean('is_default')->default(false)->comment('是否默认');
            $table->boolean('status')->default(true)->comment('状态');
            $table->unsignedInteger('index')->default(99)->comment('排序');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_sources');
    }
}
