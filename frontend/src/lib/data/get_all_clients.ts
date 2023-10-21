import { ClientModel } from "$lib/models/client_model";
import { apiUrl } from "./api_url";

export async function getAllClients() {
  const result = await fetch(apiUrl + '/client');

  if (result.status != 200) return false;

  const json = await result.json() as Array<any>;

  let clients: Array<ClientModel> = [];

  json.map((client) => {
    clients.push(
      new ClientModel(
        client['id'],
        client['name'],
        client['email'],
        client['birth'],
        client['phone'],
        client['group'],
      ),
    );
  });

  return clients;
}