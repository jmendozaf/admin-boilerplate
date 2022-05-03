<?php

use App\Models\GiftCardCode;
use Darryldecode\Cart\CartCondition;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

function getNumberFormat($amount,$format)
{

    if($format === 'PY'){
        return number_format($amount, 0 , ',' , '.' );
    }else{
        return number_format($amount, 2 , ',' , '.' );
    }

}

function getCurrentGuard(){

    return Auth::getDefaultDriver();



    if(Auth::guard('admin')->check())
        return 'admin';
    elseif(Auth::guard('web')->check())
        return 'web';
    elseif(Auth::guard('api')->check())
        return 'api';
}

function generateRandomCodes() {

    $code = strtoupper(substr(uniqid(), 0, 8));
    $exists = GiftCardCode::where('code', $code)->count();
    if($exists > 0){
        generateCode();
    }
    return $code;
}

function getWinesFromPromo($id){
    $promo = \App\Models\Promo::find($id)->load('wines');
    $wines = $promo->wines;
    $html = '';

    foreach ($wines as $wine){
        $html .= '1 '.$wine->brand->name.' '.$wine->name;
         if(!( $wines->last() == $wine )){
             $html .= '<br>+<br>';
         }
        if(( $wines->last() == $wine )){
            $html .= '<br><p class="antes">Precio full: Gs. '.getNumberFormat($wines->sum('price'),'PY').'</p>';
        }
    }

    return $html;

}

function getCartData($session){

    $items = [];
    $items = \Cart::session($session)->getContent()->sortBy(function ($cart) {
        return $cart->attributes->get('added_at');
    });

    $totalqty = \Cart::session($session)->getTotalQuantity();

    $filtered_collection = collect($items)->filter(function ($item) {
        if($item->attributes->type=='gift-card'){
            return $item;
        }
    })->values();

    $giftCard = $filtered_collection->sum('quantity');

    \Cart::session($session)->removeCartCondition('Delivery');

    $bottleqty = intval($totalqty) - intval($giftCard);

    if(($bottleqty) <4 && $totalqty!=$giftCard && $bottleqty>0){
        $condition = new \Darryldecode\Cart\CartCondition(array(
            'name' => 'Delivery',
            'type' => 'Adicional',
            'target' => 'total', // this condition will be applied to cart's subtotal when getSubTotal() is called.
            'value' => '15000'
        ));

        \Cart::session($session)->condition($condition);
    }

    $subtotal = \Cart::session($session)->getSubTotal();
    $total = \Cart::session($session)->getTotal();
    $conditions = \Cart::session($session)->getConditionsByType('gift-card')->first();

    if($conditions){
        $conditions = [ 'target' => $conditions->getTarget(),
            'name' => $conditions->getName(),
            'type' => $conditions->getType(),
            'value' => $conditions->getValue(),
            'attr' => $conditions->getAttributes(),
        ];
    }

    return [ 'cart' => $items, 'total' => $total, 'subtotal' => $subtotal, 'totalqty' => $totalqty, 'giftcardqty' => $giftCard, 'conditions' => $conditions ];

}
