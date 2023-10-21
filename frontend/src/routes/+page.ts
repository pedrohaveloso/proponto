import { getAllClients } from '$lib/data/get_all_clients';
import type { PageLoad } from './$types';

export const load: PageLoad = async ({ params }) => {
  const clients = await getAllClients();

  if (clients) {
    return {
      status: true,
      clients: clients,
    }
  }

  return {
    status: false,
  }
};