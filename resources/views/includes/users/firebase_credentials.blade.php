<script>
    const firebaseConfig = {
        apiKey: "{{ config('services.firebase.apiKey') }}",
        authDomain: "{{config('services.firebase.authDomain')}}",
        projectId: "{{config('services.firebase.projectId')}}",
        storageBucket: "{{config('services.firebase.storageBucket')}}",
        messagingSenderId: "{{config('services.firebase.messagingSenderId')}}",
        appId: "{{config('services.firebase.appId')}}",
        measurementId: "{{config('services.firebase.measurementId')}}"
    };
</script>
