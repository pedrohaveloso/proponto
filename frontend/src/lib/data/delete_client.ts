import { apiUrl } from "./api_url";

export async function deleteClient(id: number) {
  const result = await fetch(apiUrl + '/client', {
    method: 'DELETE',
    body: JSON.stringify({ id: id, })
  });

  if (result.status != 200) return false;

  return true;
}