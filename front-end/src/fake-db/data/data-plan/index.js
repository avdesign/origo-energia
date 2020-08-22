import mock from "@/fake-db/mock.js"

const data = {
  plans: [
    {
      "id": 3,
      "name": "Plano Plus",
      "price": "187,00"
    },
    {
      "id": 2,
      "name": "Plano Basic",
      "price": "100,00"
    },
    {
      "id": 1,
      "name": "Plano Free",
      "price": "0,00"
    },

  ]
}


mock.onGet("/api/data-plan/plans").reply(() => {
  return [200, JSON.parse(JSON.stringify(data.plans)).reverse()];
});

// POST : Add new Item
mock.onPost("/api/data-plan/plans/").reply((request) => {

  // Get event from post data
  let item = JSON.parse(request.data).item

  const length = data.plans.length
  let lastIndex = 0
  if(length){
    lastIndex = data.plans[length - 1].id
  }
  item.id = lastIndex + 1

  data.plans.push(item)

  return [201, {id: item.id}]
})

// Update Plan
mock.onPost(/\/api\/data-plan\/plans\/\d+/).reply((request) => {

  const itemId = request.url.substring(request.url.lastIndexOf("/")+1)

  let item = data.plans.find((item) => item.id == itemId)
  Object.assign(item, JSON.parse(request.data).item)

  return [200, item]
})

// DELETE: Remove Item
mock.onDelete(/\/api\/data-plan\/plans\/\d+/).reply((request) => {

  const itemId = request.url.substring(request.url.lastIndexOf("/")+1)

  const itemIndex = data.plans.findIndex((p) => p.id == itemId)
  data.plans.splice(itemIndex, 1)
  return [200]
})
