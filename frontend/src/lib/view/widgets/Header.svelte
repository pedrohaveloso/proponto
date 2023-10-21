<script lang="ts">
  import PHP from "$lib/assets/PHP.svg";
  import Svelte from "$lib/assets/Svelte.svg";
</script>

<header class="bg-slate-100 rounded-xl p-4 flex gap-4 items-center">
  <h1 class="font-bold">Gerenciador de clientes</h1>

  <a href="/">Listar</a>
  <a href="/add">Adicionar</a>

  <span class="right-6 absolute flex gap-2 items-center justify-center">
    <img src={PHP} alt="PHP" class="h-6" />
    <img src={Svelte} alt="Svelte" class="h-8" />
  </span>
</header>
