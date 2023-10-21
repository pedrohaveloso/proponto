import { deleteClient } from '$lib/data/delete_client';
import type { PageLoad } from './$types';

export const load: PageLoad = async ({ params }) => {
  let id = params.id;
  let status = await deleteClient(Number(id));

  return {
    status: status,
  }
};