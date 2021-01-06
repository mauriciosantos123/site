<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model {

    use HasFactory;

    const CREATED_AT = "date_created";
    const UPDATED_AT = "date_modified";

    protected $left;
    protected $table = 'products';
    protected $primaryKey = 'product_id';
    protected $fillable = [
        'name',
        'price',
        'desc',
        'img_1',
        'img_2',
        'img_3',
        'img_destaque',
        'thumbnail',
        'sale',
        'status',
        'categoria',
        'destaque',
        'lancamento',
    ];

    public function __construct(array $attributes = array()) {
        parent::__construct($attributes);
        $this->left = array();

        $this->left[] = "products.product_id as product_id";
        $this->left[] = "products.name as products_name";
        $this->left[] = "products.desc as products_desc";
        $this->left[] = "products.img_1 as products_img_1";
        $this->left[] = "products.img_2 as products_img_2";
        $this->left[] = "products.img_3 as products_img_3";
        $this->left[] = "products.img_destaque as products_img_destaque";
        $this->left[] = "products.thumbnail as products_thumbnail";
        $this->left[] = "products.price as products_price";
        $this->left[] = "products.sale as products_sale";
        $this->left[] = "products.status as products_status";
        $this->left[] = "products.categoria as categoria_id";
        $this->left[] = "products.lancamento as products_lancamento";
        $this->left[] = "categoria_models.name as categoria_name";
    }

    public function getDestaque() {
        return $this->select($this->left)->leftJoin('categoria_models', 'categoria_models.categoria_id', '=', 'products.categoria')->where('destaque', '1')->get();
    }

    public function getLancamento() {
        return $this->select($this->left)->leftJoin('categoria_models', 'categoria_models.categoria_id', '=', 'products.categoria')->where('lancamento', '1')->get();
    }

}
