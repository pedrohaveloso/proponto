import type { ClientModel } from "$lib/models/client_model";
import { apiUrl } from "./api_url";

export async function editClient(client: ClientModel) {
  const result = await fetch(apiUrl + '/client',
    {
      method: 'PUT',
      body: JSON.stringify({
        id: client.id,
        name: client.name,
        email: client.email,
        birth: client.birth,
        phone: client.phone,
        group: client.group,
      }),
    });

  if (result.status != 200) return false;

  return true;
}