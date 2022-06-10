@extends('mail.template.master')
@section('hello')
   <p style="font-size: 14px;"><b>Hello John Doe,</b></p>
  <p style="font-size: 14px;">
    Un Nouveau Produit a été ajouté sur le site.,
  </p>
  <p style="font-size: 14px;">Nom Produit : {{ $product->name }},</p>
@endsection
@section('content')
                <table class="order-detail" border="0" cellpadding="0" cellspacing="0" align="left" style="width: 100%;    margin-bottom: 50px;">
                        <tr align="left">
                            <th style="padding-left: 15px;">DESCRIPTION</th>
                            <th>QUANTITE</th>
                            <th>PRIX </th>
                        </tr>
                        <tr>

                            <td valign="top" style="padding-left: 15px;">
                                <h5 style="margin-top: 15px;">{{ $product->meta_description }} </h5>
                            </td>
                            <td valign="top" style="padding-left: 15px;">
                                <h5 style="font-size: 14px; color:#444;margin-top:15px;    margin-bottom: 0px;">Size :
                                    <span> L</span> </h5>
                                <h5 style="font-size: 14px; color:#444;margin-top: 10px;">Qté : <span>{{ $product->stock_quantity }}</span></h5>
                            </td>
                            <td valign="top" style="padding-left: 15px;">
                                <h5 style="font-size: 14px; color:#444;margin-top:15px"><b>{{ $product->unit_price }}</b></h5>
                            </td>
                        </tr>
                        
                      
                        <tr class="pad-left-right-space ">
                            <td class="m-b-5" colspan="4" align="center">
                                <button class="button">
                                  VOIR LE PRODUIT
                                </button>
                            </td>
                           
                        </tr>

                    </table>
@endsection