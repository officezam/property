<div style="margin:0;padding:0;width:100%;background-color:#f2f4f6">



    <table width="100%" cellspacing="0" cellpadding="0">
        <tbody>
        <tr>
            <td align="center" style="width:100%;margin:0;padding:0;background-color:#f2f4f6">
                <table width="100%" cellspacing="0" cellpadding="0">

                    <tbody>
                    <tr>
                        <td style="padding:25px 0;text-align:center">
                            <a target="_blank" href="{{url('/')}}" style="font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;font-size:16px;font-weight:bold;color:#2f3133;text-decoration:none">
                                Hy Respected user
                            </a>
                        </td>
                    </tr>


                    <tr>
                        <td width="100%" style="width:100%;margin:0;padding:0;border-top:1px solid #edeff2;border-bottom:1px solid #edeff2;background-color:#fff">
                            <table width="570" align="center" cellspacing="0" cellpadding="0" style="width:auto;max-width:570px;margin:0 auto;padding:0">
                                <tbody>
                                <tr>
                                    <td style="font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;padding-top:35px">

                                        <h1 style="margin-top:0;color:#2f3133;font-size:19px;font-weight:bold;text-align:left">
                                            Hi {{$data->first_name.' '.$data->last_name }},
                                        </h1>

                                        <p style="margin-top:0;color:#74787e;font-size:16px;line-height:1.9em">
                                            Here is your Email Verifcation Link for  it will be expire After  One Hour.
                                            <br/><br/>



                                        <div>
                                            <a href="{{ url('/').'/emailVerification/'.$data->remember_token }}" target="_blank"><button

                                                        style="display: block;
            width: 100%;color: #fff;
            background-color: #ff6e00;
            border-color: #ff6e00;padding: 11px 15px;
            display: inline-block;
            margin-bottom: 0;
            white-space: nowrap;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-image: none;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            -ms-border-radius: 4px;
            border-radius: 4px;
            border: none;
            outline: none !important;
            font-size: 14px;
            line-height: 1.42857;
            margin: 0;
            font-weight: 500;
            text-transform: inherit;
            text-align: center;"
                                                >Email Verification</button></a>
                                        </div>
                                        <br/>

                                        </p>
                                        </br><br/>

                                        <p style="margin-top:0;color:#74787e;font-size:16px;line-height:1.5em">
                                            The Property Team
                                        </p>


                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <table width="570" align="center" cellspacing="0" cellpadding="0" style="width:auto;max-width:570px;margin:0 auto;padding:0;text-align:center">
                                <tbody>
                                <tr>
                                    <td style="font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;color:#aeaeae;padding:35px;text-align:center">
                                        <p style="margin-top:0;color:#74787e;font-size:12px;line-height:1.5em">
                                            &copy; 2017
                                            <a href="{{url('/')}}" style="color:#3869d4">Property</a>.
                                            All rights reserved.
                                        </p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        </tbody>
    </table>

</div>
</div>