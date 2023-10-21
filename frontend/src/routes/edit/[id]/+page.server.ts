import { ClientModel } from '$lib/models/client_model';
import type { Actions } from './$types';
import { editClient } from '$lib/data/edit_client';

export const actions = {
  default: async (request) => {
    const form = await request.request.formData();

    let client = new ClientModel(
      Number(form.get('id'))!,
      form.get('name')!.toString(),
      form.get('email')!.toString(),
      form.get('birth')!.toString(),
      form.get('phone')!.toString(),
      form.get('group')!.toString(),
    );

    await editClient(client);
  },
} satisfies Actions;