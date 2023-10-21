import { ClientModel } from "$lib/models/client_model";
import { calculateAge } from "$lib/utils/calculate_age";
import { apiUrl } from "./api_url";

export async function getAllClients() {
  const result = await fetch(apiUrl + '/client');

  if (result.status != 200) return false;

  const json = await result.json() as Array<any>;

  let clients: Array<ClientModel> = [];

  json.map((client) => {
    const age = calculateAge(client['birth'])

    clients.push(
      new ClientModel(
        client['id'],
        client['name'],
        client['email'],
        age.toString(),
        client['phone'],
        client['group'],
      ),
    );
  });

  return clients;
}