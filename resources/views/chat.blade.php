@extends('layouts.app')
@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}">
<div class = "container">
	<div class = "row">
		<div class = "col-md-8 col-md-offset-2">
			<div class = "panel panel-default">
				<div class = "panel-heading">Chats</div>
				<div id = "container" class = "panel-body">
					<chat-messages :messages="messages"></chat-messages>
				</div>
				<div class= "panel-footer">
					<chat-form v-on:messagesent = "addMessage" :user= "{{Auth::user()}}"></chat-form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

<!-- Notice that we have some custom tags with the chat view, these are Vue components which we'll create soon. The chat-messages component will display our chat messages and the chat-form will provide an input field and a button to send messages. 


Before we go to create our Vue component, let's add the styles for the chat View. Open resources/views/layouts/app.blade.php (which was created when we ran make:auth) and add the code below just after the styles link:
-->