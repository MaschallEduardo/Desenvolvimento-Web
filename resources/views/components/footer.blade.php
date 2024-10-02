<footer class="py-16 text-center text-sm text-black dark:text-white/70">
        <p id="p"></p>
    </footer>

    <script>
        const data = new Date()

        console.log(data.getFullYear());

        document.getElementById('p').textContent = `© ${data.getFullYear()} SMK ENTERPRISE - Todos os direitos reservados`
        
    </script>