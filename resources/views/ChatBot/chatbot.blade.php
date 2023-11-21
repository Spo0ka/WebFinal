@extends('layouts.app')

@section('container')

<body>
    
    <div style="max-width: 600px; margin: auto; padding: 20px;">
        <h1>ChatBot</h1>
        
        <div id="chat-container" style="height: 300px; overflow-y: scroll; border: 1px solid #ccc; padding: 10px;"></div>
        
        <form id="chat-form" action="{{ route('ChatBot') }}" method="POST" style="text-align: center;">
            @csrf
            <input type="text" name="question" id="question" style="width: 100%; padding: 10px; font-size: 16px;" placeholder="Escribe tu pregunta...">
            <button type="submit" style="width: 50%; background-color: #A58721; color: white; padding: 10px; margin-top: 10px;">Enviar</button>
        </form>
        
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        function updateChat(message, reply) {
            var chatContainer = document.getElementById('chat-container');
            chatContainer.innerHTML = '';
            chatContainer.innerHTML += '<p><strong>Tú:</strong> ' + message + '</p>';
            chatContainer.innerHTML += '<p><strong>Bot:</strong> ' + reply + '</p>';
            chatContainer.scrollTop = chatContainer.scrollHeight;
        }

        $(document).ready(function () {
            $('#chat-form').submit(function (event) {
                event.preventDefault();

                var selectedQuestion = $('#question').val();
                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: { question: selectedQuestion, _token: $('meta[name="csrf-token"]').attr('content') },
                    success: function (response) {
                        updateChat(selectedQuestion, response);
                        $('#question').val('');
                    },
                    error: function (xhr, status, error) {
                        console.error('No tengo informacion de esa pregunta marcale al tocayo: 4742068492', error);
                        console.log(xhr.responseText); 
                    }
                });
            });
        });
    </script>
</body>
@endsection
