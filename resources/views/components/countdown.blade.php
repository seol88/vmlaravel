<div>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const countdownDate = new Date("2025-09-06T03:00:00Z").getTime();
            const countdownFunction = setInterval(() => {
                const now = new Date().getTime();
                const distance = countdownDate - now;
                const d = Math.floor(distance / (1000 * 60 * 60 * 24));
                const h = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const m = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const s = Math.floor((distance % (1000 * 60)) / 1000);
                document.getElementById("{{$id}}_d").style.setProperty('--value', d);
                document.getElementById("{{$id}}_h").style.setProperty('--value', h);
                document.getElementById("{{$id}}_m").style.setProperty('--value', m);
                document.getElementById("{{$id}}_s").style.setProperty('--value', s);
                if (distance <= 0) {
                    clearInterval(countdownFunction);
                    const countdownElement = document.getElementById("{{$id}}");
                    countdownElement.innerHTML = "¡La fecha ha llegado!";
                    countdownElement.classList.add('countdown-finished');
                }
            }, 1000);
        });
    </script>
    <div id="{{$id}}" class="grid auto-cols-max grid-flow-col gap-2 text-center">
        <div class="bg-neutral rounded-box text-neutral-content flex flex-col p-2"> <span class="countdown font-mono text-xl"> <span id="{{$id}}_d" style="--value:0;"></span> </span> <span class="text-xs">Días</span> </div>
        <div class="bg-neutral rounded-box text-neutral-content flex flex-col p-2"> <span class="countdown font-mono text-xl"> <span id="{{$id}}_h" style="--value:0;"></span> </span> <span class="text-xs">Horas</span> </div>
        <div class="bg-neutral rounded-box text-neutral-content flex flex-col p-2"> <span class="countdown font-mono text-xl"> <span id="{{$id}}_m" style="--value:0;"></span> </span> <span class="text-xs">Minutos</span> </div>
        <div class="bg-neutral rounded-box text-neutral-content flex flex-col p-2"> <span class="countdown font-mono text-xl"> <span id="{{$id}}_s" style="--value:0;"></span> </span> <span class="text-xs">Segundos</span> </div>
    </div>
</div>