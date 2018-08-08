<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

/**
 * ja.php
 * Author     : Miya
 * Date       : 2018/8/9
 * Version    : 0.01
 * Description: Japanese Locale in Handsome Theme
 */
class Usr_Lang_ja extends Lang {

    /**
     * @return string 返回语言名称
     */
    public function name() {
        return "日本語";
    }


    /**
     * @return array 返回包含翻译文本的数组
     */
    public function translated() {
        return array(
            // 左侧边栏
            '首页' => 'ホーム',
            '分类' => '分類',
            '页面' => 'ページ',
            '友链' => 'リンク集',
            '输入关键词搜索' => '記事検索',
            '文章RSS' => 'ブログRSS',
            '评论RSS' => 'コメントRSS',
            '后台管理' => '各種設定',
            '导航' => 'ナビゲーション',
            '组成' => 'カテゴリー',
            // 右侧边栏
            '热门文章' => '人気記事',
            '博客信息' => 'プロフィール',
            '文章数目' => '記事数',
            '评论数目' => 'コメント数',
            '运行天数' => '稼動天数',
            '最后更新' => '最新の投稿',
            '最新评论' => '最新コメント',
            '随机文章' => 'ランダム',
            // 文章页
            '最后修改' => '最後更新',
            '发表评论' => 'コメントする',
            '说点什么吧' => '何を話す',
            '归来' => 'おかえりなない',
            '退出' => 'ログアウト',
            '私密评论' => '秘密コメント',
            // 时光机
            '时光机' => 'タイムマシン',
            '发表新鲜事' => 'いまどうしてる',
            '联系方式' => 'コンテンツ',
            '关于我' => '管理者プロフィール',
            // 归档
            '归档' => 'アーカイブ',
        );
    }

    public function dateFormat() {
        return "月のM Y D日";
    }

}