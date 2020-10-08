<div class="d-test-drive-email">

    <div class="d-test-drive-email-content">
        <h3>Name</h3>
        <p>{{$data['name']}}</p>
        <hr>
        <h3>Email</h3>
        <p>{{$data['email']}}</p>
        <hr>
        <h3>Subject</h3>
        <p>{{$data['subject']}}</p>
        <hr>
        <h3>Message</h3>
        <p>{{$data['message']}}</p>

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

