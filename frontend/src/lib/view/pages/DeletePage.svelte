<script lang="ts">
  import Header from "../widgets/Header.svelte";

  export let status: boolean;
</script>

<Header />

<main class="h-full w-full flex justify-center">
  {#if status}
    <p>Cliente excluído com sucesso...</p>
  {:else}
    <p>Cliente não excluído...</p>
  {/if}
</main>
