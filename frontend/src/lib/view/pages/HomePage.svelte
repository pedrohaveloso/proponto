<script lang="ts">
  import type { ClientModel } from "$lib/models/client_model";
  import ClientsTable from "../widgets/ClientsTable.svelte";
  import Header from "../widgets/Header.svelte";

  export let status: boolean;
  export let clients: ClientModel[] | undefined;
</script>

<Header />

<main class="h-full w-full flex justify-center">
  {#if status && clients != undefined}
    <ClientsTable {clients} />
  {:else}
    <p>O servidor não está disponível no momento...</p>
  {/if}
</main>
