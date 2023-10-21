import { browser } from '$app/environment';
import { addClient } from '$lib/data/add_client';
import { ClientModel } from '$lib/models/client_model';
import { redirect } from '@sveltejs/kit';
import type { Actions } from './$types';

export const actions = {
  default: async (request) => {
    const form = await request.request.formData();

    let client = new ClientModel(
      0,
      form.get('name')!.toString(),
      form.get('email')!.toString(),
      form.get('birth')!.toString(),
      form.get('phone')!.toString(),
      form.get('group')!.toString(),
    );

    await addClient(client);
  },
} satisfies Actions;