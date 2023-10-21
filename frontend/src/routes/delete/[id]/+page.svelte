<script lang="ts">
  import DeletePage from "$lib/view/pages/DeletePage.svelte";
  import type { PageData } from "./$types";

  export let data: PageData;

  const status = data.status;
</script>

<DeletePage status />
