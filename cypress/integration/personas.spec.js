describe('Pruebas Issues', () => {
  let totalItems = 0

  it('Issue #1', () => {
    cy.visit('/')
    cy.get('table').contains('tr', 'Dirección').should('exist')
    cy.get('table').contains('tr', 'Fecha').should('not.exist')
  })

  it('Issue #2', () => {
    cy.wait(1000)

    const date = (new Date()).toLocaleDateString()
    const nombre = `N ${date}`
    const direccion = `D ${date}`
    const telefono = '01011101'
    
    cy.get('table').should('exist')
    cy.get('button#add-Personas').should('exist')

    const modal = cy.get('#contentModal')

    cy.get('button#add-Personas').click()

    modal.should('have.css', 'display', 'inline-block')

    modal.get('input[name="nombre"]').type(nombre)
    modal.get('input[name="direccion"]').type(direccion)
    modal.get('input[name="telefono"]').type(telefono)

    modal.get('button[type="submit"]').click()
  })

  it('Issue #3', () => {
    cy.wait(1000)
    cy.get('table').find('tr').its('length').should('be.gte', 0)
    cy.get('table > tbody > tr:last-child > td:last-child > button.btn-delete').click()
  })
})

