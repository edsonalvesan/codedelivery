<?php

namespace CodeDelivery\Http\Requests;

use Illuminate\Http\Request as HttpRequest;

class CheckoutRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }


    public function rules(HttpRequest $request)
    {
        $rules = ['cupom_code' => 'exists:cupoms,code,used,0'];
        $this->buildRulesItems(0,$rules);
        $items = $request->get('items',[]);
        $items = !is_array($items) ? [] : $items;
        foreach ($items as $key => $val) {
            $this->buildRulesItems($key, $rules);
        }
        return $rules;
    }

    public function buildRulesItems($key, array &$rules)
    {
        $rules["items.".$key.".product_id"] = 'required|exists:products,id';
        $rules["items.".$key.".qtd"] = 'required';
    }

    public function messages()
    {
        return [

            'cupom_code.exists:cupoms,code,used,0'         => 'O Cupom inválido',
            'items.0.product_id.required'                 => 'Informar o produto é obrigatório',
            'items.0.qtd.required'                        => 'Informar a quantidade é obrigatório'

        ];
    }
}
