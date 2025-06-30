<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Event</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 100%;
            max-width: 600px;
            transform: translateY(0);
            transition: all 0.3s ease;
        }

        .container:hover {
            transform: translateY(-5px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }

        h1 {
            color: #2d3748;
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 30px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .form-group {
            margin-bottom: 25px;
            position: relative;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #4a5568;
            font-weight: 600;
            font-size: 0.95rem;
            transition: color 0.3s ease;
        }

        input[type="text"],
        input[type="date"],
        input[type="time"],
        textarea {
            width: 100%;
            padding: 15px 20px;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            font-size: 1rem;
            background: #f8fafc;
            transition: all 0.3s ease;
            outline: none;
            font-family: inherit;
        }

        input[type="text"]:focus,
        input[type="date"]:focus,
        input[type="time"]:focus,
        textarea:focus {
            border-color: #667eea;
            background: #fff;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            transform: translateY(-1px);
        }

        textarea {
            resize: vertical;
            min-height: 120px;
            line-height: 1.5;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .submit-btn {
            width: 100%;
            padding: 18px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
            position: relative;
            overflow: hidden;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #667eea;
            text-decoration: none;
            font-weight: 500;
            margin-top: 20px;
            padding: 10px 0;
            transition: all 0.3s ease;
        }

        .back-link:hover {
            color: #764ba2;
            transform: translateX(-3px);
        }

        .back-link::before {
            content: "←";
            font-size: 1.2rem;
            transition: transform 0.3s ease;
        }

        .back-link:hover::before {
            transform: translateX(-3px);
        }

        /* Icon styling */
        .form-group::before {
            content: "";
            position: absolute;
            left: 15px;
            top: 43px;
            width: 20px;
            height: 20px;
            background-size: contain;
            background-repeat: no-repeat;
            opacity: 0.5;
            z-index: 1;
        }

        .title-group::before {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23667eea' viewBox='0 0 24 24'%3E%3Cpath d='M4 4h16v2H4V4zm0 4h16v2H4V8zm0 4h11v2H4v-2z'/%3E%3C/svg%3E");
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .container {
                margin: 10px;
                padding: 30px 20px;
            }

            h1 {
                font-size: 2rem;
            }

            .form-row {
                grid-template-columns: 1fr;
                gap: 0;
            }

            input[type="text"],
            input[type="date"],
            input[type="time"],
            textarea {
                padding: 12px 15px;
            }

            .submit-btn {
                padding: 15px;
            }
        }

        /* Loading animation for button */
        .submit-btn.loading {
            pointer-events: none;
        }

        .submit-btn.loading::after {
            content: "";
            position: absolute;
            width: 20px;
            height: 20px;
            border: 2px solid transparent;
            border-top: 2px solid white;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        @keyframes spin {
            0% { transform: translate(-50%, -50%) rotate(0deg); }
            100% { transform: translate(-50%, -50%) rotate(360deg); }
        }

        /* Error state styling */
        .error {
            border-color: #e53e3e !important;
        }

        .error-message {
            color: #e53e3e;
            font-size: 0.875rem;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Event</h1>
        <form method="POST" action="{{ route('events.update', $event->id) }}" id="eventForm">
            @csrf
            @method('PUT')
            
            <div class="form-group title-group">
                <label for="title">Event Title</label>
                <input type="text" id="title" name="title" value="{{ old('title', $event->title) }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" placeholder="Describe your event..." required>{{ old('description', $event->description) }}</textarea>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" id="date" name="date" value="{{ old('date', $event->date) }}" required>
                </div>
                
                <div class="form-group">
                    <label for="time">Time</label>
                    <input type="time" id="time" name="time" value="{{ old('time', $event->time) }}" required>
                </div>
            </div>

            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" id="location" name="location" value="{{ old('location', $event->location) }}" placeholder="Enter event location" required>
            </div>

            <button type="submit" class="submit-btn" id="submitBtn">
                Update Event
            </button>
        </form>
        
        <a href="{{ route('events.index') }}" class="back-link">Back to Events</a>
    </div>

    <script>
        // Add form submission handling
        document.getElementById('eventForm').addEventListener('submit', function(e) {
            const submitBtn = document.getElementById('submitBtn');
            submitBtn.classList.add('loading');
            submitBtn.textContent = 'Updating...';
        });

        // Add input validation styling
        const inputs = document.querySelectorAll('input, textarea');
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                if (this.hasAttribute('required') && !this.value.trim()) {
                    this.classList.add('error');
                } else {
                    this.classList.remove('error');
                }
            });

            input.addEventListener('input', function() {
                this.classList.remove('error');
            });
        });
    </script>
</body>
</html>