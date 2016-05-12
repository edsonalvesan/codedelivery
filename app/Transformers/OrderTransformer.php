<?php

namespace CodeDelivery\Transformers;

use CodeDelivery\Models\Order;
use Illuminate\Database\Eloquent\Collection;
use League\Fractal\TransformerAbstract;


/**
 * Class OderTransformer
 * @package namespace CodeDelivery\Transformers;
 */
class OrderTransformer extends TransformerAbstract
{
      //protected $defaultIncludes = ['cupom','items','client'];
      protected $availableIncludes = ['cupom','items','client'];
    /**
     * Transform the \Order entity
     * @param \Oder $model
     *
     * @return array
     */
    public function transform(Order $model)
    {
        return [
            'id'         => (int) $model->id,
            'total'     => (float) $model-> total,
            'product_names' => $this->getArrayProductNames($model->items),
            'status' => (int) $model->status,
            'hash' => $model->hash,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }

    protected function getArrayProductNames(Collection $items){
         $names = [];
        foreach ($items as $item){
            $names[] = $item->product->name;
        }

        return $names;
    }

    public function includeClient(Order $model)
    {
        return $this->item($model->client, new ClientTransformer());
    }

    public function includeCupom(Order $model)
    {
     if(!$model->cupom) {
         return null;
     }
     return $this->item($model->cupom, new CupomTransformer());
 }

    public function IncludeItems(Order $model)
    {
        return $this->collection($model->items, new OrderItemTransformer());
    }
}
