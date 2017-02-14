require 'rails_helper'

RSpec.describe "testimonials/show", type: :view do
  before(:each) do
    @testimonial = assign(:testimonial, Testimonial.create!(
      :content => "MyText",
      :title => "Title"
    ))
  end

  it "renders attributes in <p>" do
    render
    expect(rendered).to match(/MyText/)
    expect(rendered).to match(/Title/)
  end
end
