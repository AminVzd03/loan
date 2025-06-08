<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futuristic UI Component</title>
    <style>
        :root {
            --neon-blue: #0ff0fc;
            --neon-pink: #ff2ced;
            --neon-purple: #9d00ff;
            --dark-bg: #0a0a12;
        }

        body {
            background-color: var(--dark-bg);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: 'Orbitron', sans-serif;
            overflow: hidden;
        }

        .cyber-container {
            position: relative;
            width: 400px;
            padding: 30px;
            background: rgba(10, 10, 18, 0.8);
            border-radius: 15px;
            box-shadow:
                0 0 15px var(--neon-blue),
                0 0 30px rgba(0, 255, 252, 0.2),
                inset 0 0 10px rgba(0, 255, 252, 0.1);
            border: 1px solid var(--neon-blue);
            transform-style: preserve-3d;
            transform: perspective(1000px) rotateX(5deg);
            backdrop-filter: blur(5px);
        }

        .cyber-container::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, var(--neon-blue), var(--neon-pink), var(--neon-purple));
            z-index: -1;
            border-radius: 16px;
            animation: borderGlow 6s linear infinite;
            background-size: 400%;
            opacity: 0.7;
        }

        @keyframes borderGlow {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .cyber-title {
            color: var(--neon-blue);
            text-align: center;
            text-shadow: 0 0 10px var(--neon-blue);
            margin-bottom: 30px;
            font-size: 24px;
            letter-spacing: 2px;
        }

        .cyber-select {
            width: 100%;
            padding: 15px;
            margin-bottom: 25px;
            background: rgba(0, 0, 20, 0.7);
            border: 1px solid var(--neon-blue);
            color: white;
            font-family: 'Orbitron', sans-serif;
            font-size: 16px;
            border-radius: 8px;
            appearance: none;
            outline: none;
            box-shadow: 0 0 10px rgba(0, 255, 252, 0.3);
            transition: all 0.3s;
            cursor: pointer;
            position: relative;
            z-index: 1;
        }

        .cyber-select:hover {
            box-shadow: 0 0 20px var(--neon-blue);
        }

        .cyber-select option {
            background-color: var(--dark-bg);
            color: white;
        }

        .cyber-input-group {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .cyber-input {
            flex: 1;
            padding: 15px;
            background: rgba(0, 0, 20, 0.7);
            border: 1px solid var(--neon-pink);
            color: white;
            font-family: 'Orbitron', sans-serif;
            font-size: 18px;
            text-align: center;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(255, 44, 237, 0.3);
            transition: all 0.3s;
            outline: none;
        }

        .cyber-input:focus {
            box-shadow: 0 0 20px var(--neon-pink);
        }

        .cyber-btn {
            width: 50px;
            height: 50px;
            margin: 0 10px;
            background: rgba(0, 0, 20, 0.7);
            border: 1px solid;
            color: white;
            font-family: 'Orbitron', sans-serif;
            font-size: 24px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
        }

        .cyber-btn::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                to bottom right,
                transparent, transparent, transparent,
                rgba(255, 255, 255, 0.1)
            );
            transform: rotate(45deg);
            transition: all 0.5s;
        }

        .cyber-btn:hover::before {
            left: 100%;
            top: 100%;
        }

        .btn-plus {
            border-color: var(--neon-blue);
            box-shadow: 0 0 10px rgba(0, 255, 252, 0.3);
        }

        .btn-plus:hover {
            box-shadow: 0 0 20px var(--neon-blue);
            text-shadow: 0 0 10px var(--neon-blue);
        }

        .btn-minus {
            border-color: var(--neon-pink);
            box-shadow: 0 0 10px rgba(255, 44, 237, 0.3);
        }

        .btn-minus:hover {
            box-shadow: 0 0 20px var(--neon-pink);
            text-shadow: 0 0 10px var(--neon-pink);
        }

        .holographic-line {
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--neon-blue), transparent);
            margin: 25px 0;
            position: relative;
        }

        .holographic-line::after {
            content: '';
            position: absolute;
            top: -5px;
            left: 0;
            right: 0;
            height: 10px;
            background: linear-gradient(90deg, transparent, var(--neon-pink), transparent);
            opacity: 0.3;
        }

        /* Futuristic glowing dots */
        .glow-dots {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
            z-index: -1;
        }

        .glow-dot {
            position: absolute;
            width: 5px;
            height: 5px;
            border-radius: 50%;
            background: var(--neon-blue);
            box-shadow: 0 0 10px 2px var(--neon-blue);
            animation: float 15s infinite linear;
        }

        @keyframes float {
            0% { transform: translate(0, 0) rotate(0deg); opacity: 0; }
            10% { opacity: 1; }
            90% { opacity: 1; }
            100% { transform: translate(100px, -100px) rotate(360deg); opacity: 0; }
        }
    </style>
</head>
<body>
<div class="cyber-container">
    <!-- Glowing background dots -->
    <div class="glow-dots" id="glowDots"></div>

    <h2 class="cyber-title">NEON CONTROL PANEL</h2>

    <select class="cyber-select">
        <option value="" disabled selected>SELECT MODULE</option>
        <option value="quantum">Quantum Processor</option>
        <option value="neural">Neural Network</option>
        <option value="plasma">Plasma Conduit</option>
        <option value="gravity">Gravity Drive</option>
        <option value="hologram">Holographic Display</option>
        <option value="shield">Force Shield</option>
    </select>

    <div class="holographic-line"></div>

    <div class="cyber-input-group">
        <button class="cyber-btn btn-minus" id="decrement">-</button>
        <input type="number" class="cyber-input" id="numericInput" value="0" min="0">
        <button class="cyber-btn btn-plus" id="increment">+</button>
    </div>
</div>

<script>
    // Create glowing dots
    const glowDots = document.getElementById('glowDots');
    for (let i = 0; i < 20; i++) {
        const dot = document.createElement('div');
        dot.classList.add('glow-dot');
        dot.style.left = `${Math.random() * 100}%`;
        dot.style.top = `${Math.random() * 100}%`;
        dot.style.animationDelay = `${Math.random() * 15}s`;
        dot.style.animationDuration = `${10 + Math.random() * 20}s`;
        glowDots.appendChild(dot);
    }

    // Numeric input functionality
    const numericInput = document.getElementById('numericInput');
    const incrementBtn = document.getElementById('increment');
    const decrementBtn = document.getElementById('decrement');

    incrementBtn.addEventListener('click', () => {
        numericInput.value = parseInt(numericInput.value) + 5;
        triggerPulse(incrementBtn);
    });

    decrementBtn.addEventListener('click', () => {
        const newValue = parseInt(numericInput.value) - 5;
        numericInput.value = newValue >= 0 ? newValue : 0;
        triggerPulse(decrementBtn);
    });

    function triggerPulse(element) {
        element.style.transform = 'scale(1.1)';
        setTimeout(() => {
            element.style.transform = 'scale(1)';
        }, 200);
    }
</script>
</body>
</html>
