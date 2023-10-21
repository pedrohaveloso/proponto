<script lang="ts">
  import { goto } from "$app/navigation";
  import type { ClientModel } from "$lib/models/client_model";

  export let clients: ClientModel[];
</script>

<table>
  <tr>
    <th class="rounded-tl-xl px-4 py-2 bg-slate-200">ID</th>
    <th class="px-4 py-2 bg-slate-200">Nome</th>
    <th class="px-4 py-2 bg-slate-200">E-mail</th>
    <th class="px-4 py-2 bg-slate-200">Idade</th>
    <th class="px-4 py-2 bg-slate-200">Telefone</th>
    <th class="px-4 py-2 bg-slate-200">Grupo</th>
    <th class="rounded-tr-xl px-4 py-2 bg-slate-200">Editar/Excluir</th>
  </tr>
  {#each clients as client}
    <tr>
      <td class="bg-slate-100 px-4 py-2">{client.id}</td>
      <td class="bg-slate-100 px-4 py-2">{client.name} </td>
      <td class="bg-slate-100 px-4 py-2">{client.email}</td>
      <td class="bg-slate-100 px-4 py-2">{client.birth}</td>
      <td class="bg-slate-100 px-4 py-2">{client.phone}</td>
      <td class="bg-slate-100 px-4 py-2">{client.group}</td>
      <td class="bg-slate-100 px-4 py-2">
        <button
          type="button"
          class="bg-slate-600 text-slate-100 py-2 px-4 rounded-xl hover:bg-slate-500 transition durantion-500"
          on:click={() => goto("/edit/" + client.id)}
        >
          Editar
        </button>
        <button
          type="button"
          class="bg-red-600 text-slate-100 py-2 px-4 rounded-xl hover:bg-red-500 transition durantion-500"
          on:click={() => goto("/delete/" + client.id)}
        >
          Excluir
        </button>
      </td>
    </tr>
  {/each}
</table>
