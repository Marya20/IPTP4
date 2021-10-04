<div class="card">
    <div class="card-body">
        <h5 class="card-title">Vet Clinic</h5>
        <p>
        Verify your email address
        Hi {{$user->name}}!,
        
        Welcome to Vet Clinic!!

        Please verify your email address by to complete registration.
        </p>

        <div>
            <a href="{{url('/verification/' . $user->id . "/" . $user->remember_token)}}">Click here</a>
        </div>
    </div>
</div>