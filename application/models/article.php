<?php
class Article extends CI_MODEL {

    public $article_id;
    public $article_name;
    public $article_body;
    public $article_modified;
    public $article_created;

    public function get_db_table() {
      return 'article';
    }
    public function get_db_table_pk() {
      return 'article_id';
    }
    /**
    *Renvoie des données sur un article de blog en dur dans ce model
    */
  /*  public function get_data () {
        return array(
          'article_id'=>45,
          'article_name'=>'Code Igniter est un framework',
          'article_body'=>'Blabla',
        );
    }

}*/
