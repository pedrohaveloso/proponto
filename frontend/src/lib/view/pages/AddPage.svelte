<script>
  import Header from "../widgets/Header.svelte";
</script>

<Header />

<main class="h-full w-full flex justify-center flex-col items-center">
  <form
    method="POST"
    action="/add"
    class="flex flex-col p-4 bg-slate-100 rounded-xl gap-2 min-w-[300px]"
  >
    <p class="text-center font-bold">Adicione um cliente.</p>
    <label class="flex flex-col" for="name">
      Nome:
      <input
        required
        class="bg-slate-200 rounded-xl p-2"
        type="text"
        name="name"
      />
    </label>

    <label class="flex flex-col" for="email">
      E-mail:
      <input
        required
        class="bg-slate-200 rounded-xl p-2"
        type="email"
        name="email"
      />
    </label>

    <label class="flex flex-col" for="birth">
      Nome:
      <input
        required
        class="bg-slate-200 rounded-xl p-2"
        type="date"
        name="birth"
      />
    </label>

    <label class="flex flex-col" for="phone">
      Telefone:
      <input
        required
        class="bg-slate-200 rounded-xl p-2"
        type="tel"
        name="phone"
      />
    </label>

    <label class="flex flex-col" for="group">
      Grupo:
      <select
        required
        class="bg-slate-200 rounded-xl p-2"
        name="group"
        id="group"
      >
        <option value="Bronze">Bronze</option>
        <option value="Prata">Prata</option>
        <option value="Ouro">Ouro</option>
        <option value="Diamante">Diamante</option>
      </select>
    </label>
    <button
      class="bg-slate-600 hover:bg-slate-500 text-slate-100 rounded-xl h-12 mt-2"
      type="submit">Adicionar</button
    >
  </form>
</main>
