<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🌙 শাহী সালামি হাব ২০২৬ | আল্টিমেট প্রো</title>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;500;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.5.1/dist/confetti.browser.min.js"></script>
    
    <style>
        :root {
            --gold: #D4AF37;
            --dark: #050a18;
            --glass: rgba(255, 255, 255, 0.05);
            --neon-red: #ff3e3e;
            --ssl-blue: #0056b3;
        }

        body {
            margin: 0; padding: 0;
            font-family: 'Hind Siliguri', sans-serif;
            background-color: var(--dark);
            color: #fff; overflow-x: hidden;
        }

        #bg-canvas { position: fixed; top: 0; left: 0; z-index: -1; }

        .wrapper { max-width: 480px; margin: 40px auto; padding: 20px; position: relative; z-index: 10; }

        .card {
            background: var(--glass); backdrop-filter: blur(25px);
            border: 1px solid rgba(212, 175, 55, 0.2); border-radius: 30px;
            padding: 25px; margin-bottom: 25px; box-shadow: 0 25px 50px rgba(0,0,0,0.5);
            text-align: center; transition: 0.4s;
        }

        h1, h2 {
            background: linear-gradient(to right, #bf953f, #fcf6ba, #b38728, #fbf5b7, #aa771c);
            -webkit-background-clip: text; -webkit-text-fill-color: transparent;
            margin-bottom: 10px;
        }

        .mode-container { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 20px; }
        .mode-btn {
            padding: 15px; border-radius: 15px; border: 1px solid rgba(255,255,255,0.1);
            background: rgba(255,255,255,0.05); color: #ccc; cursor: pointer; font-weight: 700; transition: 0.3s;
        }
        .mode-btn.active { background: var(--gold); color: #000; box-shadow: 0 0 20px rgba(212, 175, 55, 0.4); }

        .input-group { margin: 15px 0; text-align: left; }
        label { display: block; margin-bottom: 5px; color: var(--gold); font-size: 14px; }
        input {
            width: 100%; padding: 14px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.1);
            background: rgba(0, 0, 0, 0.4); color: #fff; outline: none; box-sizing: border-box;
        }

        .btn-pay {
            width: 100%; padding: 16px; border-radius: 15px; border: none;
            background: #fff; color: var(--ssl-blue); font-weight: 800;
            display: flex; align-items: center; justify-content: center; gap: 10px; cursor: pointer;
        }

        .btn-track {
            background: linear-gradient(45deg, #ff3e3e, #b30000);
            color: white; border: none; padding: 15px; width: 100%; border-radius: 15px; font-weight: bold; cursor: pointer;
        }

        .funny-msg { font-size: 13px; color: #ff9f43; font-style: italic; margin-top: 10px; }

        /* circular logo */
        .pay-logo {
            width: 60px; height: 60px;
            background: var(--gold);
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-weight: 900; color: #000; font-size: 24px;
            margin: 0 auto 20px;
            box-shadow: 0 0 15px var(--gold);
        }
    </style>
</head>
<body>

<canvas id="bg-canvas"></canvas>

<div class="wrapper">
    <div class="card">
        <h1>🌙 শাহী সালামি হাব</h1>
        <p style="font-size: 14px; opacity: 0.7;">কিপটামি ছাড়ুন, দুয়া নিন!</p>
        <div id="timer" style="color: var(--gold); font-weight: bold; margin-top: 10px;"></div>
    </div>

    <div class="mode-container">
        <button class="mode-btn active" onclick="showSec('calc', this)">সালামি হিসাব</button>
        <button class="mode-btn" onclick="showSec('pay', this)">পেমেন্ট গেটওয়ে</button>
    </div>

    <div id="calc" class="card">
        <h2>💰 কত টাকা খসাবেন?</h2>
        <div class="input-group">
            <label>সিনিয়র শিকার (৩০০৳/জন)</label>
            <input type="number" id="s_num" placeholder="কতজন বড় ভাই?">
        </div>
        <div class="input-group">
            <label>জুনিয়র শিকার (১০০৳/জন)</label>
            <input type="number" id="j_num" placeholder="কতজন ছোট ভাই?">
        </div>
        <button class="btn-pay" style="background: var(--gold); color: #000;" onclick="doMath()">মোট হিসাব দেখুন</button>
        <h3 id="result" style="margin-top: 20px; color: #fff;"></h3>
        <p class="funny-msg">"হিসাব দেখে হার্টফেল করলে কর্তৃপক্ষ দায়ী নয়!"</p>
    </div>

    <div id="pay" class="card" style="display:none;">
        <div class="pay-logo">৳</div> <p style="color: #4cd137; font-weight: bold;">নিরাপদ চাদাবাজি সিস্টেম ✅</p>
        <div class="input-group">
            <label>আপনার বিকাশ/নগদ নাম্বার</label>
            <input type="text" id="pay_num" placeholder="01XXXXXXXXX">
        </div>
        <div class="input-group">
            <label>সালামির পরিমাণ (৳)</label>
            <input type="number" id="pay_amt" placeholder="৳ ০.০০">
        </div>
        <button class="btn-pay" onclick="triggerPayment()">
            Pay Now
        </button>
        <p class="funny-msg">"টাকা না দিলে আপনার নাম কিপটা লিস্টে যাবে!"</p>
    </div>

    <div class="card" style="border-color: var(--neon-red);">
        <h2 style="color: var(--neon-red); margin-top: 0;">📍 কিপটা ডিটেক্টর</h2>
        <p style="font-size: 13px;">সালামি না দিয়ে পালালে সরাসরি বাসায় হানা দেওয়া হবে!</p>
        <button class="btn-track" onclick="findHim()">বন্ধুর লোকেশন ট্র্যাক করুন</button>
    </div>
</div>

<script>
    // --- ৩ডি টাকা বৃষ্টি অ্যানিমেশন (Three.js) ---
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(75, window.innerWidth/window.innerHeight, 0.1, 1000);
    const renderer = new THREE.WebGLRenderer({ canvas: document.getElementById('bg-canvas'), alpha: true });
    renderer.setSize(window.innerWidth, window.innerHeight);

    function createMoneyTexture(symbol) {
        const canvas = document.createElement('canvas');
        canvas.width = 64; canvas.height = 64;
        const ctx = canvas.getContext('2d');
        ctx.fillStyle = '#D4AF37'; ctx.font = 'bold 40px Arial'; ctx.textAlign = 'center'; ctx.textBaseline = 'middle';
        ctx.fillText(symbol, 32, 32);
        return new THREE.CanvasTexture(canvas);
    }

    const textures = [createMoneyTexture('💸'), createMoneyTexture('৳')];
    const moneyItems = [];
    for(let i=0; i<60; i++) {
        const sprite = new THREE.Sprite(new THREE.SpriteMaterial({ map: textures[i%2], transparent: true }));
        sprite.position.set((Math.random()-0.5)*10, Math.random()*10, (Math.random()-0.5)*5);
        sprite.scale.set(0.4, 0.4, 1);
        scene.add(sprite);
        moneyItems.push({ obj: sprite, s: 0.02 + Math.random()*0.05 });
    }
    camera.position.z = 5;

    function animate() {
        requestAnimationFrame(animate);
        moneyItems.forEach(m => {
            m.obj.position.y -= m.s;
            if(m.obj.position.y < -5) m.obj.position.y = 8;
        });
        renderer.render(scene, camera);
    }
    animate();

    // --- লজিক ও প্রপার অ্যালার্ট ---
    function showSec(id, btn) {
        document.getElementById('calc').style.display = id === 'calc' ? 'block' : 'none';
        document.getElementById('pay').style.display = id === 'pay' ? 'block' : 'none';
        document.querySelectorAll('.mode-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
    }

    function doMath() {
        const s = (document.getElementById('s_num').value || 0) * 300;
        const j = (document.getElementById('j_num').value || 0) * 100;
        const total = s + j;
        
        if(total === 0) {
            Swal.fire({ icon: 'question', title: 'আরে!', text: 'কাউকে তো শিকার বানান আগে!', confirmButtonColor: '#D4AF37' });
            return;
        }

        document.getElementById('result').innerText = `মোট অংক: ${total} ৳ 💸`;
        Swal.fire({
            title: 'হিসাব রেডি! 💰',
            text: `আপনার বন্ধুর পকেট থেকে ${total} টাকা খসবে। কনফার্ম?`,
            icon: 'info',
            confirmButtonText: 'অবশ্যই!',
            confirmButtonColor: '#D4AF37'
        });
    }

    function triggerPayment() {
        const amt = document.getElementById('pay_amt').value;
        if(!amt) {
            Swal.fire('টাকা কই?', 'বাতাস দিয়ে পেমেন্ট হবে না ভাই!', 'error');
            return;
        }

        Swal.fire({
            title: 'প্রসেসিং হচ্ছে...',
            text: 'আপনার গেটওয়েতে টাকা পাঠিয়ে দেওয়ার ব্যবস্থা হচ্ছে।',
            timer: 2000,
            timerProgressBar: true,
            didOpen: () => { Swal.showLoading(); }
        }).then(() => {
            confetti({ particleCount: 150, spread: 70, origin: { y: 0.6 } });
            Swal.fire({
                title: 'পেমেন্ট সফল! 🎉',
                text: `অভিনন্দন! আপনি ${amt} টাকা চাদাবাজি করেছেন।`,
                icon: 'success',
                confirmButtonColor: '#2ecc71'
            });
        });
    }

    function findHim() {
        Swal.fire({
            title: 'ট্র্যাকিং শুরু...',
            text: 'স্যাটেলাইট দিয়ে কিপটা বন্ধুকে খোঁজা হচ্ছে।',
            allowOutsideClick: false,
            didOpen: () => { Swal.showLoading(); }
        });

        setTimeout(() => {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition((p) => {
                    Swal.fire({
                        title: 'টার্গেট লকড! 📍',
                        text: 'বন্ধুর বাসার ম্যাপ পাওয়া গেছে। হানা দিন!',
                        icon: 'success',
                        confirmButtonText: 'ম্যাপ ওপেন করুন'
                    }).then(() => {
                        window.open(`https://www.google.com/maps?q=${p.coords.latitude},${p.coords.longitude}`, '_blank');
                    });
                }, () => {
                    Swal.fire('ব্যর্থ!', 'বন্ধু মনে হয় গর্তে লুকিয়ে আছে (লোকেশন ব্লক)!', 'error');
                });
            }
        }, 2000);
    }

    setInterval(() => {
        const diff = new Date("2026-03-20") - new Date();
        const d = Math.floor(diff/86400000), h = Math.floor((diff%86400000)/3600000), m = Math.floor((diff%3600000)/60000), s = Math.floor((diff%60000)/1000);
        document.getElementById('timer').innerText = `⏳ ঈদের বাকি: ${d}দিন ${h}ঘঃ ${m}মিঃ ${s}সেঃ`;
    }, 1000);
    
    function triggerPayment() {
        const amt = document.getElementById('pay_amt').value;
        const myNumber = "01XXXXXXXXX"; // এখানে আপনার আসল বিকাশ/নগদ নাম্বারটি লিখে দিন!

        if(!amt) {
            Swal.fire('টাকা কই?', 'বাতাস দিয়ে পেমেন্ট হবে না ভাই!', 'error');
            return;
        }

        Swal.fire({
            title: 'পেমেন্ট ইনফো',
            html: `সালামি পাঠানোর জন্য এই নাম্বারে ক্যাশ-ইন করুন:<br><br>
                   <b style="font-size: 24px; color: #D4AF37;">${myNumber}</b><br><br>
                   টাকা পাঠানোর পর স্ক্রিনশট দিতে ভুলবেন না!`,
            icon: 'info',
            confirmButtonText: 'বুঝলাম',
            confirmButtonColor: '#0056b3'
        }).then(() => {
            // পেমেন্ট কনফার্মেশনের জন্য কনফেটি ইফেক্ট
            confetti({ particleCount: 150, spread: 70, origin: { y: 0.6 } });
            Swal.fire({
                title: 'পেমেন্ট সফল! 🎉',
                text: `অভিনন্দন! আপনি ${amt} টাকা চাদাবাজি করার পথে এক ধাপ এগিয়ে গেলেন।`,
                icon: 'success',
                confirmButtonColor: '#2ecc71'
            });
        });
    }
</script>
</body>
</html>