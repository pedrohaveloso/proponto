<script>
  import EditPage from "$lib/view/pages/EditPage.svelte";

  export let data;

  const id = Number(data.id);
</script>

<EditPage {id} />
