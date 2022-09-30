@extends('mail.template');


@section('content')
       <table align="left" border="0" cellpadding="0" cellspacing="0" style="text-align: left; background-color: #fafafa;" width="100%">
                        <tr>
                            <td style="text-align: center;">
                                <img src="../assets/images/email-temp/delivery-2.png" alt="" style=";margin-bottom: 30px;">
                            </td>
                        </tr>
                        <tr style="background-color: #fafafa; text-align:center">
                            <td >
                                <p style="font-size: 14px;"><b>Hello Admin,</b></p>
                                <p style="font-size: 14px;">Une nouvelle Marque de produit vient d'être créer sur votre site web</p>
                                <p style="font-size: 14px;">Ci dessous les informations de la marque :</p>
                            </td>
                        </tr>
          </table>

             <table cellpadding="0" cellspacing="0" border="0" align="left" style="width: 100%;margin-top: 10px; margin-bottom: 10px; background-color: #fafafa;">
                        <tbody>
                            <tr>
                                <td style="background-color: #fafafa;border: 1px solid #ddd;padding: 15px;letter-spacing: 0.3px;width: 50%;">
                                    <h5 style="font-size: 16px; font-weight: 600;color: #000; line-height: 16px;
                                    padding-bottom: 13px; border-bottom: 1px solid #e6e8eb; letter-spacing: -0.65px; margin-top:0; margin-bottom: 13px;">
                                        Nom : </h5>
                                    <p style="text-align: left;font-weight: normal; font-size: 14px; color: #000000;line-height: 21px;    margin-top: 0;">
                                        {{$brand->name}}</p>
                                </td>
                                <td><img src="{{ asset('assets/email/email-temp/space.jpg') }}" alt=" " height="25" width="30">
                                </td>
                                <td style="background-color: #fafafa;border: 1px solid #ddd;padding: 15px;letter-spacing: 0.3px;width: 50%;">
                                    <h5 style="font-size: 16px;font-weight: 600;color: #000; line-height: 16px; padding-bottom: 13px; border-bottom: 1px solid #e6e8eb; letter-spacing: -0.65px; margin-top:0; margin-bottom: 13px;">
                                        Statut : </h5>
                                    <p style="text-align: left;font-weight: normal; font-size: 14px; color: #000000;line-height: 21px;    margin-top: 0;">
                                        @if($brand->state==1) publier @else Non_pulier @endif</p>
                                </td>
                            </tr>
                         


                        </tbody>
                    </table>



@endsection
