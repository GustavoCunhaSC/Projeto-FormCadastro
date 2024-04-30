import 'mock-local-storage';


describe("Testes para o tema escuro", function() {
    beforeEach(function() {
      localStorage.removeItem("dark");
    });
  
    it("Verifica se o tema escuro é aplicado ao HTML quando a chave 'dark' está definida no localStorage", function() {
      localStorage.setItem("dark", "dark-mode");
 
      expect(document.querySelector('html').classList.contains('dark-mode')).toBe(true);
    });
  
    it("Verifica se o tema é alternado corretamente quando o switch é alterado", function() {
      var checkbox = document.querySelector('#switch');
      checkbox.checked = true; 
      checkbox.dispatchEvent(new Event('change'));
     
      expect(document.querySelector('html').classList.contains('dark-mode')).toBe(true);
    });
  
    it("Verifica se o tema selecionado é persistido corretamente no localStorage", function() {
      localStorage.removeItem("dark"); 
      expect(localStorage.getItem("dark")).toEqual("dark-mode");
    });
  
    it("Verifica se os temas são alternados corretamente ao mudar o switch várias vezes", function() {
      localStorage.removeItem("dark"); 
      var checkbox = document.querySelector('#switch');
      checkbox.checked = true;
      checkbox.dispatchEvent(new Event('change'));
      expect(document.querySelector('html').classList.contains('dark-mode')).toBe(true);
      checkbox.checked = false;
      checkbox.dispatchEvent(new Event('change'));
      expect(document.querySelector('html').classList.contains('linear-mode')).toBe(true);
    });
  
    it("Verifica se o tema padrão é aplicado corretamente ao HTML quando não há um tema definido no localStorage", function() {
      localStorage.removeItem("dark"); 
      expect(document.querySelector('html').classList.contains('linear-mode')).toBe(true);
    });
  });
  