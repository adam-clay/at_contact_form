<!DOCTYPE html>
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 20px auto;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 2px solid #367C2B;
            border-radius: 4px;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        button {
            background-color: #367C2B;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #2A5B21;
        }

        .header {
            /* background-color: #367C2B;*/
            color: white;
            padding: 10px 0;
            text-align: center;
            margin-bottom: 20px;
        }

        .header img {
            max-width: 100%;
            height: auto;
        }

        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 2px solid #367C2B;
            border-radius: 4px;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

    </style>
</head>
<body>
    <div class="header">
        <img src="{{ asset('images/banner.png') }}" alt="Contact Us at Atlantic Tractor">
    </div>

    <div class="form-container">
        <form method="POST" action="{{ route('contact.store') }}">
            @csrf
            <input type="text" name="first_name" placeholder="First Name" required>
            <input type="text" name="last_name" placeholder="Last Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <input type="text" name="phone" placeholder="Your Phone Number" required>
            <select name="location" id="location" required>
            <option value="">Select a Location</option>
                <option value="Carlisle">Carlisle</option>
                <option value="Chambersburg">Chambersburg</option>
                <option value="Chestertown">Chestertown</option>
                <option value="Clayton">Clayton</option>
                <option value="East New Market">East New Market</option>
                <option value="Hanover">Hanover</option>
                <option value="Hagerstown">Hagerstown</option>
                <option value="Hunt Valley">Hunt Valley</option>
                <option value="Mechanicsville">Mechanicsville</option>
                <option value="Mercersburg">Mercersburg</option>
                <option value="Newark">Newark</option>
                <option value="Oxford">Oxford</option>
                <option value="Pocomoke">Pocomoke</option>
                <option value="Queen Anne">Queen Anne</option>
                <option value="Salisbury">Salisbury</option>
                <option value="Upper Marlboro">Upper Marlboro</option>
                <option value="whiteford">Whiteford</option>
                <option value="Westminster">Westminster</option>
            <textarea name="message" placeholder="Your Message" required></textarea>
            
            {!! app('captcha')->display() !!}
            <br>
            <button type="submit">Send</button>
        </form>
        {!! app('captcha')->renderJs() !!}
    </div>
</body>
</html>
