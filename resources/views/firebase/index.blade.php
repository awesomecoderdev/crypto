@extends('layouts.app')
{{-- title --}}
@section('title', 'Send Notification : CryptoGainers')

@section('content')
    {{-- start:nav --}}
    @include('layouts.nav')
    {{-- end:nav --}}
    <button id="btn-nft-enable" onclick="initFirebaseMessagingRegistration()" class="btn btn-danger btn-xs btn-flat">Allow
        for Notification</button>

    <pre>
        @php
            print_r($notification)
        @endphp
</pre>
@endsection

@section('scripts')
    <script src="https://www.gstatic.com/firebasejs/7.23.0/firebase.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script>
        var firebaseConfig = {
            apiKey: "AIzaSyCjPaIbDsDSuKRFYt5wuBGMTPkG6ZyDS3I",
            authDomain: "testnotification-io.firebaseapp.com",
            projectId: "testnotification-io",
            storageBucket: "testnotification-io.appspot.com",
            messagingSenderId: "160343124814",
            appId: "1:160343124814:web:75b12f7eb2eead7c6f0c1f",
            measurementId: "G-EYMVG6PXZ2",
        };

        firebase.initializeApp(firebaseConfig);
        const messaging = firebase.messaging();

        function initFirebaseMessagingRegistration() {
            messaging
                .requestPermission()
                .then(function() {
                    return messaging.getToken()
                })
                .then(function(token) {
                    console.log(token);

                    // $.ajaxSetup({
                    //     headers: {
                    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    //     }
                    // });

                    // $.ajax({
                    //     url: '',
                    //     type: 'POST',
                    //     data: {
                    //         token: token
                    //     },
                    //     dataType: 'JSON',
                    //     success: function(response) {
                    //         alert('Token saved successfully.');
                    //     },
                    //     error: function(err) {
                    //         console.log('User Chat Token Error' + err);
                    //     },
                    // });

                }).catch(function(err) {
                    console.log('User Chat Token Error' + err);
                });
        }

        messaging.onMessage(function(payload) {
            const noteTitle = payload.notification.title;
            const noteOptions = {
                body: payload.notification.body,
                icon: payload.notification.icon,
            };
            new Notification(noteTitle, noteOptions);
        });
    </script>
@endsection
