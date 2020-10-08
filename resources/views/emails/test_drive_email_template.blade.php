{{--@component('mail::message')--}}
{{--# Introduction--}}

{{--The body of your message.--}}

{{--@component('mail::button', ['url' => ''])--}}
{{--Button Text--}}
{{--@endcomponent--}}

{{--Thanks,<br>--}}
{{--{{ config('app.name') }}--}}
{{--@endcomponent--}}

<div class="d-test-drive-email">

    <div class="d-test-drive-email-content">
        <h3>ຊື່ (Name)</h3>
        <p>{{$data['name']}}</p>
        <hr>
        <h3>ນາມສະກຸນ (Surname)</h3>
        <p>{{$data['surname']}}</p>
        <hr>
        <h3>ເບີໂທ (Tel)</h3>
        <p>{{$data['tel']}}</p>
        <hr>
        <h3>ອີເມວ (E-Mail)</h3>
        <p>{{$data['email']}}</p>
        <hr>
        <h3>ລົດທີ່ຕ້ອງການທົດລອງຂັບ (Cars that want to test drive)</h3>
        @foreach($data['dcheckbox1'] as $ch)
            <p>{{$ch}}</p>
        @endforeach
        <hr>
        <h3>ໂຊຣູມອີຊູຊຸທີ່ທ່ານສະດວກທົດລອງຂັບ (Any Isuzu showrooms at your convenience)</h3>
        <p>{{$data['dradio']}}</p>

        <p style="margin-top: 90px; text-align: center">Send from <a href="http://www.myisuzulaos.com/">Isuzu Laos</a></p>
    </div>



</div>

<style>
    .d-test-drive-email{
        width: 100%;
        background-color: #E9EAEC;
        padding: 50px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 10px;
        color: black;
    }
    .d-test-drive-email-content{
        width: 600px;
        background-color: white;
        border: 1px solid gray;
        padding: 40px;
        margin: 0 auto;
    }
    .d-test-drive-email-content h6{
        font-weight: bold;
    }
</style>
