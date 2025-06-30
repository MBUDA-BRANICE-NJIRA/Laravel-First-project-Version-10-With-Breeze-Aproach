<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Event</title>
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
            margin-bottom: 10px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .subtitle {
            text-align: center;
            color: #718096;
            font-size: 1.1rem;
            margin-bottom: 30px;
            font-weight: 400;
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

        .required {
            color: #e53e3e;
            margin-left: 3px;
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

        input::placeholder,
        textarea::placeholder {
            color: #a0aec0;
            font-style: italic;
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

        .submit-btn:disabled {
            opacity: 0.7;
            cursor: not-allowed;
            transform: none;
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

        /* Form validation styles */
        .form-group.invalid input,
        .form-group.invalid textarea {
            border-color: #e53e3e;
            box-shadow: 0 0 0 3px rgba(229, 62, 62, 0.1);
        }

        .error-message {
            color: #e53e3e;
            font-size: 0.875rem;
            margin-top: 5px;
            display: none;
        }

        .form-group.invalid .error-message {
            display: block;
        }

        /* Success animation */
        .form-group.valid input,
        .form-group.valid textarea {
            border-color: #38a169;
        }

        /* Character counter for description */
        .char-counter {
            font-size: 0.875rem;
            color: #718096;
            text-align: right;
            margin-top: 5px;
        }

        .char-counter.warning {
            color: #d69e2e;
        }

        .char-counter.danger {
            color: #e53e3e;
        }

        /* Form progress indicator */
        .progress-bar {
            width: 100%;
            height: 4px;
            background: #e2e8f0;
            border-radius: 2px;
            margin-bottom: 30px;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #667eea, #764ba2);
            width: 0%;
            transition: width 0.3s ease;
            border-radius: 2px;
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

            .subtitle {
                font-size: 1rem;
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

        /* Loading animation */
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

        /* Floating label effect */
        .form-group.floating label {
            position: absolute;
            left: 20px;
            top: 15px;
            color: #a0aec0;
            transition: all 0.3s ease;
            pointer-events: none;
            background: transparent;
        }

        .form-group.floating.active label,
        .form-group.floating.filled label {
            top: -8px;
            left: 15px;
            font-size: 0.75rem;
            color: #667eea;
            background: white;
            padding: 0 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Create Event</h1>
        <p class="subtitle">Plan something amazing</p>
        
        <div class="progress-bar">
            <div class="progress-fill" id="progressFill"></div>
        </div>

        <form method="POST" action="{{ route('events.store') }}" id="createEventForm" novalidate>
            @csrf
            
            <div class="form-group">
                <label for="title">Event Title<span class="required">*</span></label>
                <input type="text" id="title" name="title" placeholder="Enter a catchy title for your event" required>
                <div class="error-message">Please enter an event title</div>
            </div>

            <div class="form-group">
                <label for="description">Description<span class="required">*</span></label>
                <textarea id="description" name="description" placeholder="Describe what makes your event special..." required maxlength="500"></textarea>
                <div class="char-counter" id="charCounter">0/500 characters</div>
                <div class="error-message">Please provide a description for your event</div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="date">Date<span class="required">*</span></label>
                    <input type="date" id="date" name="date" required>
                    <div class="error-message">Please select an event date</div>
                </div>
                
                <div class="form-group">
                    <label for="time">Time<span class="required">*</span></label>
                    <input type="time" id="time" name="time" required>
                    <div class="error-message">Please select an event time</div>
                </div>
            </div>

            <div class="form-group">
                <label for="location">Location<span class="required">*</span></label>
                <input type="text" id="location" name="location" placeholder="Where will your event take place?" required>
                <div class="error-message">Please enter the event location</div>
            </div>

            <button type="submit" class="submit-btn" id="submitBtn">
                Create Event
            </button>
        </form>
        
        <a href="{{ route('dashboard') }}" class="back-link">Back to Dashboard</a>
    </div>

    <script>
        // Form elements
        const form = document.getElementById('createEventForm');
        const submitBtn = document.getElementById('submitBtn');
        const progressFill = document.getElementById('progressFill');
        const description = document.getElementById('description');
        const charCounter = document.getElementById('charCounter');
        
        // Required fields for progress calculation
        const requiredFields = ['title', 'description', 'date', 'time', 'location'];
        
        // Set minimum date to today
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('date').setAttribute('min', today);

        // Character counter for description
        description.addEventListener('input', function() {
            const length = this.value.length;
            const maxLength = 500;
            charCounter.textContent = `${length}/${maxLength} characters`;
            
            if (length > maxLength * 0.9) {
                charCounter.classList.add('danger');
                charCounter.classList.remove('warning');
            } else if (length > maxLength * 0.7) {
                charCounter.classList.add('warning');
                charCounter.classList.remove('danger');
            } else {
                charCounter.classList.remove('warning', 'danger');
            }
        });

        // Form validation
        function validateField(field) {
            const formGroup = field.closest('.form-group');
            const isValid = field.value.trim() !== '';
            
            if (isValid) {
                formGroup.classList.remove('invalid');
                formGroup.classList.add('valid');
            } else {
                formGroup.classList.add('invalid');
                formGroup.classList.remove('valid');
            }
            
            updateProgress();
            return isValid;
        }

        // Update progress bar
        function updateProgress() {
            const filledFields = requiredFields.filter(fieldName => {
                const field = document.getElementById(fieldName);
                return field.value.trim() !== '';
            });
            
            const progress = (filledFields.length / requiredFields.length) * 100;
            progressFill.style.width = progress + '%';
            
            // Enable/disable submit button
            submitBtn.disabled = progress < 100;
        }

        // Add event listeners to all required fields
        requiredFields.forEach(fieldName => {
            const field = document.getElementById(fieldName);
            field.addEventListener('blur', () => validateField(field));
            field.addEventListener('input', () => {
                field.closest('.form-group').classList.remove('invalid');
                updateProgress();
            });
        });

        // Form submission
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            let isFormValid = true;
            
            // Validate all required fields
            requiredFields.forEach(fieldName => {
                const field = document.getElementById(fieldName);
                if (!validateField(field)) {
                    isFormValid = false;
                }
            });
            
            // Additional date validation
            const dateField = document.getElementById('date');
            const selectedDate = new Date(dateField.value);
            const today = new Date();
            today.setHours(0, 0, 0, 0);
            
            if (selectedDate < today) {
                const dateGroup = dateField.closest('.form-group');
                dateGroup.classList.add('invalid');
                dateGroup.querySelector('.error-message').textContent = 'Event date cannot be in the past';
                isFormValid = false;
            }
            
            if (isFormValid) {
                // Show loading state
                submitBtn.classList.add('loading');
                submitBtn.textContent = 'Creating Event...';
                submitBtn.disabled = true;
                
                // Submit the form
                this.submit();
            } else {
                // Scroll to first invalid field
                const firstInvalid = document.querySelector('.form-group.invalid');
                if (firstInvalid) {
                    firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    firstInvalid.querySelector('input, textarea').focus();
                }
            }
        });

        // Initialize progress
        updateProgress();
    </script>
</body>
</html>