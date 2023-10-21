<script lang="ts">
  import type { ClientModel } from "$lib/models/client_model";
  import HomePage from "$lib/view/pages/HomePage.svelte";
  import type { PageData } from "./$types";

  export let data: PageData;

  let clients: ClientModel[];

  if (data.status) {
    clients = data.clients!;
  }
</script>

<HomePage status {clients} />
